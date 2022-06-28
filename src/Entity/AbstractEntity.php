<?php

namespace AllDigitalRewards\WeGift;

abstract class AbstractEntity implements \JsonSerializable
{
    public function __construct(array $data = null)
    {
        if (!is_null($data)) {
            $this->hydrate($data);
        }
    }

    public function toArray(): array
    {
        $data = call_user_func('get_object_vars', $this);

        foreach ($data as $key => $value) {
            if ($value instanceof \DateTime) {
                $data[$key] = $value->format('Y-m-d H:i:s');
            }
        }

        return $data;
    }

    public function hydrate(array $options): void
    {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            if(is_null($value)) {
                continue;
            }
            $method = $this->getSetterMethod($key);
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
    }

    protected function isJson($string): bool
    {
        json_decode($string);
        if (JSON_ERROR_NONE !== json_last_error()) {
            return false;
        }

        return true;
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    private function getSetterMethod($propertyName): string
    {
        return "set" . str_replace(' ', '', ucwords(str_replace('_', ' ', $propertyName)));
    }
}
