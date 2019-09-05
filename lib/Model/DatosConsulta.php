<?php

namespace APIHub\Client\Model;

use \ArrayAccess;
use \APIHub\Client\ObjectSerializer;

class DatosConsulta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'DatosConsulta';
    
    protected static $apihubTypes = [
        'numero_documento' => 'string',
        'tipo_documento' => 'int',
        'prim_nom_raz_soc' => 'string',
        'segundo_nombre' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'tipo_producto' => 'string',
        'ingreso_bruto' => 'float',
        'otros_ingresos' => 'float',
        'impuestos_gastos_variables' => 'float',
        'otros_descuentos' => 'float',
        'gastos_fijos' => 'float',
        'deudas_vigentes' => 'float',
        'cuota' => 'float',
        'plazo' => 'float'
    ];
    
    protected static $apihubFormats = [
        'numero_documento' => null,
        'tipo_documento' => null,
        'prim_nom_raz_soc' => null,
        'segundo_nombre' => null,
        'apellido_paterno' => null,
        'apellido_materno' => null,
        'tipo_producto' => null,
        'ingreso_bruto' => null,
        'otros_ingresos' => null,
        'impuestos_gastos_variables' => null,
        'otros_descuentos' => null,
        'gastos_fijos' => null,
        'deudas_vigentes' => null,
        'cuota' => null,
        'plazo' => null
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
        'numero_documento' => 'numeroDocumento',
        'tipo_documento' => 'tipoDocumento',
        'prim_nom_raz_soc' => 'primNomRazSoc',
        'segundo_nombre' => 'segundoNombre',
        'apellido_paterno' => 'apellidoPaterno',
        'apellido_materno' => 'apellidoMaterno',
        'tipo_producto' => 'tipoProducto',
        'ingreso_bruto' => 'ingresoBruto',
        'otros_ingresos' => 'otrosIngresos',
        'impuestos_gastos_variables' => 'impuestosGastosVariables',
        'otros_descuentos' => 'otrosDescuentos',
        'gastos_fijos' => 'gastosFijos',
        'deudas_vigentes' => 'deudasVigentes',
        'cuota' => 'cuota',
        'plazo' => 'plazo'
    ];
    
    protected static $setters = [
        'numero_documento' => 'setNumeroDocumento',
        'tipo_documento' => 'setTipoDocumento',
        'prim_nom_raz_soc' => 'setPrimNomRazSoc',
        'segundo_nombre' => 'setSegundoNombre',
        'apellido_paterno' => 'setApellidoPaterno',
        'apellido_materno' => 'setApellidoMaterno',
        'tipo_producto' => 'setTipoProducto',
        'ingreso_bruto' => 'setIngresoBruto',
        'otros_ingresos' => 'setOtrosIngresos',
        'impuestos_gastos_variables' => 'setImpuestosGastosVariables',
        'otros_descuentos' => 'setOtrosDescuentos',
        'gastos_fijos' => 'setGastosFijos',
        'deudas_vigentes' => 'setDeudasVigentes',
        'cuota' => 'setCuota',
        'plazo' => 'setPlazo'
    ];
    
    protected static $getters = [
        'numero_documento' => 'getNumeroDocumento',
        'tipo_documento' => 'getTipoDocumento',
        'prim_nom_raz_soc' => 'getPrimNomRazSoc',
        'segundo_nombre' => 'getSegundoNombre',
        'apellido_paterno' => 'getApellidoPaterno',
        'apellido_materno' => 'getApellidoMaterno',
        'tipo_producto' => 'getTipoProducto',
        'ingreso_bruto' => 'getIngresoBruto',
        'otros_ingresos' => 'getOtrosIngresos',
        'impuestos_gastos_variables' => 'getImpuestosGastosVariables',
        'otros_descuentos' => 'getOtrosDescuentos',
        'gastos_fijos' => 'getGastosFijos',
        'deudas_vigentes' => 'getDeudasVigentes',
        'cuota' => 'getCuota',
        'plazo' => 'getPlazo'
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
    const TIPO_PRODUCTO_SP = 'SP';
    const TIPO_PRODUCTO_EP = 'EP';
    
    
    
    public function getTipoProductoAllowableValues()
    {
        return [
            self::TIPO_PRODUCTO_SP,
            self::TIPO_PRODUCTO_EP,
        ];
    }
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['numero_documento'] = isset($data['numero_documento']) ? $data['numero_documento'] : null;
        $this->container['tipo_documento'] = isset($data['tipo_documento']) ? $data['tipo_documento'] : null;
        $this->container['prim_nom_raz_soc'] = isset($data['prim_nom_raz_soc']) ? $data['prim_nom_raz_soc'] : null;
        $this->container['segundo_nombre'] = isset($data['segundo_nombre']) ? $data['segundo_nombre'] : null;
        $this->container['apellido_paterno'] = isset($data['apellido_paterno']) ? $data['apellido_paterno'] : null;
        $this->container['apellido_materno'] = isset($data['apellido_materno']) ? $data['apellido_materno'] : null;
        $this->container['tipo_producto'] = isset($data['tipo_producto']) ? $data['tipo_producto'] : null;
        $this->container['ingreso_bruto'] = isset($data['ingreso_bruto']) ? $data['ingreso_bruto'] : null;
        $this->container['otros_ingresos'] = isset($data['otros_ingresos']) ? $data['otros_ingresos'] : null;
        $this->container['impuestos_gastos_variables'] = isset($data['impuestos_gastos_variables']) ? $data['impuestos_gastos_variables'] : null;
        $this->container['otros_descuentos'] = isset($data['otros_descuentos']) ? $data['otros_descuentos'] : null;
        $this->container['gastos_fijos'] = isset($data['gastos_fijos']) ? $data['gastos_fijos'] : null;
        $this->container['deudas_vigentes'] = isset($data['deudas_vigentes']) ? $data['deudas_vigentes'] : null;
        $this->container['cuota'] = isset($data['cuota']) ? $data['cuota'] : null;
        $this->container['plazo'] = isset($data['plazo']) ? $data['plazo'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['numero_documento'] === null) {
            $invalidProperties[] = "'numero_documento' can't be null";
        }
        if ($this->container['tipo_documento'] === null) {
            $invalidProperties[] = "'tipo_documento' can't be null";
        }
        if ($this->container['tipo_producto'] === null) {
            $invalidProperties[] = "'tipo_producto' can't be null";
        }
        $allowedValues = $this->getTipoProductoAllowableValues();
        if (!is_null($this->container['tipo_producto']) && !in_array($this->container['tipo_producto'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tipo_producto', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }
        if ($this->container['ingreso_bruto'] === null) {
            $invalidProperties[] = "'ingreso_bruto' can't be null";
        }
        if ($this->container['impuestos_gastos_variables'] === null) {
            $invalidProperties[] = "'impuestos_gastos_variables' can't be null";
        }
        if ($this->container['gastos_fijos'] === null) {
            $invalidProperties[] = "'gastos_fijos' can't be null";
        }
        if ($this->container['deudas_vigentes'] === null) {
            $invalidProperties[] = "'deudas_vigentes' can't be null";
        }
        if ($this->container['cuota'] === null) {
            $invalidProperties[] = "'cuota' can't be null";
        }
        if ($this->container['plazo'] === null) {
            $invalidProperties[] = "'plazo' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getNumeroDocumento()
    {
        return $this->container['numero_documento'];
    }
    
    public function setNumeroDocumento($numero_documento)
    {
        $this->container['numero_documento'] = $numero_documento;
        return $this;
    }
    
    public function getTipoDocumento()
    {
        return $this->container['tipo_documento'];
    }
    
    public function setTipoDocumento($tipo_documento)
    {
        $this->container['tipo_documento'] = $tipo_documento;
        return $this;
    }
    
    public function getPrimNomRazSoc()
    {
        return $this->container['prim_nom_raz_soc'];
    }
    
    public function setPrimNomRazSoc($prim_nom_raz_soc)
    {
        $this->container['prim_nom_raz_soc'] = $prim_nom_raz_soc;
        return $this;
    }
    
    public function getSegundoNombre()
    {
        return $this->container['segundo_nombre'];
    }
    
    public function setSegundoNombre($segundo_nombre)
    {
        $this->container['segundo_nombre'] = $segundo_nombre;
        return $this;
    }
    
    public function getApellidoPaterno()
    {
        return $this->container['apellido_paterno'];
    }
    
    public function setApellidoPaterno($apellido_paterno)
    {
        $this->container['apellido_paterno'] = $apellido_paterno;
        return $this;
    }
    
    public function getApellidoMaterno()
    {
        return $this->container['apellido_materno'];
    }
    
    public function setApellidoMaterno($apellido_materno)
    {
        $this->container['apellido_materno'] = $apellido_materno;
        return $this;
    }
    
    public function getTipoProducto()
    {
        return $this->container['tipo_producto'];
    }
    
    public function setTipoProducto($tipo_producto)
    {
        $allowedValues = $this->getTipoProductoAllowableValues();
        if (!in_array($tipo_producto, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tipo_producto', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tipo_producto'] = $tipo_producto;
        return $this;
    }
    
    public function getIngresoBruto()
    {
        return $this->container['ingreso_bruto'];
    }
    
    public function setIngresoBruto($ingreso_bruto)
    {
        $this->container['ingreso_bruto'] = $ingreso_bruto;
        return $this;
    }
    
    public function getOtrosIngresos()
    {
        return $this->container['otros_ingresos'];
    }
    
    public function setOtrosIngresos($otros_ingresos)
    {
        $this->container['otros_ingresos'] = $otros_ingresos;
        return $this;
    }
    
    public function getImpuestosGastosVariables()
    {
        return $this->container['impuestos_gastos_variables'];
    }
    
    public function setImpuestosGastosVariables($impuestos_gastos_variables)
    {
        $this->container['impuestos_gastos_variables'] = $impuestos_gastos_variables;
        return $this;
    }
    
    public function getOtrosDescuentos()
    {
        return $this->container['otros_descuentos'];
    }
    
    public function setOtrosDescuentos($otros_descuentos)
    {
        $this->container['otros_descuentos'] = $otros_descuentos;
        return $this;
    }
    
    public function getGastosFijos()
    {
        return $this->container['gastos_fijos'];
    }
    
    public function setGastosFijos($gastos_fijos)
    {
        $this->container['gastos_fijos'] = $gastos_fijos;
        return $this;
    }
    
    public function getDeudasVigentes()
    {
        return $this->container['deudas_vigentes'];
    }
    
    public function setDeudasVigentes($deudas_vigentes)
    {
        $this->container['deudas_vigentes'] = $deudas_vigentes;
        return $this;
    }
    
    public function getCuota()
    {
        return $this->container['cuota'];
    }
    
    public function setCuota($cuota)
    {
        $this->container['cuota'] = $cuota;
        return $this;
    }
    
    public function getPlazo()
    {
        return $this->container['plazo'];
    }
    
    public function setPlazo($plazo)
    {
        $this->container['plazo'] = $plazo;
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
