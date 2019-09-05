<?php

namespace APIHub\Client\Model;

use \ArrayAccess;
use \APIHub\Client\ObjectSerializer;

class Variable implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Variable';
    
    protected static $apihubTypes = [
        'nombre' => 'string',
        'tipo' => 'string',
        'valor' => 'object'
    ];
    
    protected static $apihubFormats = [
        'nombre' => null,
        'tipo' => null,
        'valor' => null
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
        'nombre' => 'nombre',
        'tipo' => 'tipo',
        'valor' => 'valor'
    ];
    
    protected static $setters = [
        'nombre' => 'setNombre',
        'tipo' => 'setTipo',
        'valor' => 'setValor'
    ];
    
    protected static $getters = [
        'nombre' => 'getNombre',
        'tipo' => 'getTipo',
        'valor' => 'getValor'
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
        $this->container['nombre'] = isset($data['nombre']) ? $data['nombre'] : null;
        $this->container['tipo'] = isset($data['tipo']) ? $data['tipo'] : null;
        $this->container['valor'] = isset($data['valor']) ? $data['valor'] : null;
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
    
    public function getNombre()
    {
        return $this->container['nombre'];
    }
    
    public function setNombre($nombre)
    {
        $this->container['nombre'] = $nombre;
        return $this;
    }
    
    public function getTipo()
    {
        return $this->container['tipo'];
    }
    
    public function setTipo($tipo)
    {
        $this->container['tipo'] = $tipo;
        return $this;
    }
    
    public function getValor()
    {
        return $this->container['valor'];
    }
    
    public function setValor($valor)
    {
        $this->container['valor'] = $valor;
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
