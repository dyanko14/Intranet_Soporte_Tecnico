<?php
class Model_polizas extends CI_Model {
	//............................................................................
	public function get_clientes()
	{
		$query = $this->db->query("SELECT id, razon_social, alias FROM clientes");
		return $query->result();
	}
	//............................................................................
	public function get_polizas()
	{
		$query = $this->db->query("SELECT
			polizas.id AS id_poliza,
    	polizas.fecha_inicio,
	    polizas.fecha_fin,
	    polizas.mtto_anual,
	    polizas.clave_sap,
			polizas.vendedor,
	    polizas.venta,
	    polizas.moneda,
			polizas_categoria.id AS id_categoria,
			polizas_categoria.categoria,
			clientes.id AS id_cliente,
			clientes.razon_social,
			clientes.alias
			FROM polizas
			INNER JOIN polizas_categoria ON
								 polizas_categoria.id = polizas.id_categoria
			INNER JOIN clientes ON
								 clientes.id = polizas.id_cliente");
		return $query->result();
	}
	//............................................................................
	public function get_poliza_data($id_poliza = null)
	{
		$query = $this->db->query("SELECT
			polizas.id AS id_poliza,
    	polizas.fecha_inicio,
	    polizas.fecha_fin,
	    polizas.mtto_anual,
	    polizas.clave_sap,
			polizas.alias,
			polizas.vendedor,
	    polizas.venta,
	    polizas.moneda,
			polizas_categoria.id AS id_categoria,
			polizas_categoria.categoria,
			clientes.id AS id_cliente,
			clientes.razon_social,
			clientes.alias AS alias_cliente
			FROM polizas
			INNER JOIN polizas_categoria ON
								 polizas_categoria.id = polizas.id_categoria
			INNER JOIN clientes ON
								 clientes.id = polizas.id_cliente
			WHERE polizas.id = '$id_poliza' ");
		return $query->result();
	}
	//............................................................................
	public function get_poliza_proyectos($id_poliza = null)
	{
		$query = $this->db->query("SELECT
			estados.id AS id_estado,
    	estados.nombre AS estado,
			municipios.id AS id_municipio,
	    municipios.nombre AS municipio,
			edificios.id AS id_edificio,
	    edificios.edificio AS edificio,
			polizas_proyectos.id AS id_poliza_proyecto,
	    proyectos.id AS id_proyecto,
	    proyectos.alias AS proyecto,
	    proyectos.fecha_instalacion AS fecha_inst
			FROM polizas_proyectos
			INNER JOIN proyectos ON proyectos.id = polizas_proyectos.id_proyecto
			INNER JOIN edificios ON edificios.id = proyectos.id_edificio
			INNER JOIN municipios ON municipios.id = edificios.id_municipio
			INNER JOIN estados ON estados.id = municipios.estado_id
			WHERE polizas_proyectos.id_poliza = '$id_poliza' ");
		return $query->result();
	}
	//............................................................................
	public function get_poliza_servicios($id_poliza = null)
	{
		$query = $this->db->query("SELECT
			polizas.id AS id_poliza,
			polizas.clave_sap AS clave_sap,
			clientes.id AS id_cliente,
    	clientes.alias AS cliente,
			edificios.id AS id_edificio,
    	edificios.edificio AS edificio,
    	proyectos.id AS id_proyecto,
    	proyectos.alias AS proyecto,
			servicios.id AS id_servicio,
    	servicios.fecha_fin AS fecha_fin,
    	servicios.falla AS falla,
			servicios.acciones AS acciones
			FROM servicios
			INNER JOIN proyectos ON proyectos.id = servicios.id_proyecto
			INNER JOIN edificios ON edificios.id = proyectos.id_edificio
			INNER JOIN clientes ON clientes.id = edificios.id_cliente
			INNER JOIN polizas on polizas.id_cliente = clientes.id
			WHERE polizas.id = '$id_poliza' ");
		return $query->result();
	}
	//............................................................................
}
?>
