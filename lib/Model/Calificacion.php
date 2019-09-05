<?php

namespace APIHub\Client\Model;

use \ArrayAccess;
use \APIHub\Client\ObjectSerializer;

class Calificacion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Calificacion';
    
    protected static $apihubTypes = [
        'numero_consulta' => 'float',
        'clave_recomendacion' => 'string',
        'recomendacion' => 'string',
        'tipo_producto' => 'string',
        'nombre_producto' => 'string',
        'monto_linea_credito' => 'float',
        'flag_linea_credito_alta' => 'float',
        'msg_linea_credito_alta' => 'string',
        'mensaje' => 'string',
        'motivos' => 'object[]',
        'variables' => '\APIHub\Client\Model\Variable[]'
    ];
    
    protected static $apihubFormats = [
        'numero_consulta' => null,
        'clave_recomendacion' => null,
        'recomendacion' => null,
        'tipo_producto' => null,
        'nombre_producto' => null,
        'monto_linea_credito' => null,
        'flag_linea_credito_alta' => null,
        'msg_linea_credito_alta' => null,
        'mensaje' => null,
        'motivos' => null,
        'variables' => null
    ];
    
    public static function swaggerTypes()
    {
        return self::$apihubTypes;
    }
    
    public static function swaggerFormats()
    {
        return self::$apihubFormats;
    }
    
    protected static $attributeMap = [
        'numero_consulta' => 'numeroConsulta',
        'clave_recomendacion' => 'claveRecomendacion',
        'recomendacion' => 'recomendacion',
        'tipo_producto' => 'tipoProducto',
        'nombre_producto' => 'nombreProducto',
        'monto_linea_credito' => 'montoLineaCredito',
        'flag_linea_credito_alta' => 'flagLineaCreditoAlta',
        'msg_linea_credito_alta' => 'msgLineaCreditoAlta',
        'mensaje' => 'mensaje',
        'motivos' => 'motivos',
        'variables' => 'variables'
    ];
    
    protected static $setters = [
        'numero_consulta' => 'setNumeroConsulta',
        'clave_recomendacion' => 'setClaveRecomendacion',
        'recomendacion' => 'setRecomendacion',
        'tipo_producto' => 'setTipoProducto',
        'nombre_producto' => 'setNombreProducto',
        'monto_linea_credito' => 'setMontoLineaCredito',
        'flag_linea_credito_alta' => 'setFlagLineaCreditoAlta',
        'msg_linea_credito_alta' => 'setMsgLineaCreditoAlta',
        'mensaje' => 'setMensaje',
        'motivos' => 'setMotivos',
        'variables' => 'setVariables'
    ];
    
    protected static $getters = [
        'numero_consulta' => 'getNumeroConsulta',
        'clave_recomendacion' => 'getClaveRecomendacion',
        'recomendacion' => 'getRecomendacion',
        'tipo_producto' => 'getTipoProducto',
        'nombre_producto' => 'getNombreProducto',
        'monto_linea_credito' => 'getMontoLineaCredito',
        'flag_linea_credito_alta' => 'getFlagLineaCreditoAlta',
        'msg_linea_credito_alta' => 'getMsgLineaCreditoAlta',
        'mensaje' => 'getMensaje',
        'motivos' => 'getMotivos',
        'variables' => 'getVariables'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$apihubModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['numero_consulta'] = isset($data['numero_consulta']) ? $data['numero_consulta'] : null;
        $this->container['clave_recomendacion'] = isset($data['clave_recomendacion']) ? $data['clave_recomendacion'] : null;
        $this->container['recomendacion'] = isset($data['recomendacion']) ? $data['recomendacion'] : null;
        $this->container['tipo_producto'] = isset($data['tipo_producto']) ? $data['tipo_producto'] : null;
        $this->container['nombre_producto'] = isset($data['nombre_producto']) ? $data['nombre_producto'] : null;
        $this->container['monto_linea_credito'] = isset($data['monto_linea_credito']) ? $data['monto_linea_credito'] : null;
        $this->container['flag_linea_credito_alta'] = isset($data['flag_linea_credito_alta']) ? $data['flag_linea_credito_alta'] : null;
        $this->container['msg_linea_credito_alta'] = isset($data['msg_linea_credito_alta']) ? $data['msg_linea_credito_alta'] : null;
        $this->container['mensaje'] = isset($data['mensaje']) ? $data['mensaje'] : null;
        $this->container['motivos'] = isset($data['motivos']) ? $data['motivos'] : null;
        $this->container['variables'] = isset($data['variables']) ? $data['variables'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getNumeroConsulta()
    {
        return $this->container['numero_consulta'];
    }
    
    public function setNumeroConsulta($numero_consulta)
    {
        $this->container['numero_consulta'] = $numero_consulta;
        return $this;
    }
    
    public function getClaveRecomendacion()
    {
        return $this->container['clave_recomendacion'];
    }
    
    public function setClaveRecomendacion($clave_recomendacion)
    {
        $this->container['clave_recomendacion'] = $clave_recomendacion;
        return $this;
    }
    
    public function getRecomendacion()
    {
        return $this->container['recomendacion'];
    }
    
    public function setRecomendacion($recomendacion)
    {
        $this->container['recomendacion'] = $recomendacion;
        return $this;
    }
    
    public function getTipoProducto()
    {
        return $this->container['tipo_producto'];
    }
    
    public function setTipoProducto($tipo_producto)
    {
        $this->container['tipo_producto'] = $tipo_producto;
        return $this;
    }
    
    public function getNombreProducto()
    {
        return $this->container['nombre_producto'];
    }
    
    public function setNombreProducto($nombre_producto)
    {
        $this->container['nombre_producto'] = $nombre_producto;
        return $this;
    }
    
    public function getMontoLineaCredito()
    {
        return $this->container['monto_linea_credito'];
    }
    
    public function setMontoLineaCredito($monto_linea_credito)
    {
        $this->container['monto_linea_credito'] = $monto_linea_credito;
        return $this;
    }
    
    public function getFlagLineaCreditoAlta()
    {
        return $this->container['flag_linea_credito_alta'];
    }
    
    public function setFlagLineaCreditoAlta($flag_linea_credito_alta)
    {
        $this->container['flag_linea_credito_alta'] = $flag_linea_credito_alta;
        return $this;
    }
    
    public function getMsgLineaCreditoAlta()
    {
        return $this->container['msg_linea_credito_alta'];
    }
    
    public function setMsgLineaCreditoAlta($msg_linea_credito_alta)
    {
        $this->container['msg_linea_credito_alta'] = $msg_linea_credito_alta;
        return $this;
    }
    
    public function getMensaje()
    {
        return $this->container['mensaje'];
    }
    
    public function setMensaje($mensaje)
    {
        $this->container['mensaje'] = $mensaje;
        return $this;
    }
    
    public function getMotivos()
    {
        return $this->container['motivos'];
    }
    
    public function setMotivos($motivos)
    {
        $this->container['motivos'] = $motivos;
        return $this;
    }
    
    public function getVariables()
    {
        return $this->container['variables'];
    }
    
    public function setVariables($variables)
    {
        $this->container['variables'] = $variables;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
