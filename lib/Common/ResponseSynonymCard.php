<?php


namespace YandexCheckoutPayout\Common;

/**
 * Класс объекта ответа, возвращаемого API при запросе синонима карты
 *
 * @package YandexCheckoutPayout\Common
 */
class ResponseSynonymCard
{
    protected $reason;
    protected $skrDestinationCardProductCode;
    protected $skrDestinationCardSynonim;
    protected $skrDestinationCardType;
    protected $skrCardBin;
    protected $skrCardLast4;
    protected $skrDestinationCardCountryCode;
    protected $skrDestinationCardPanmask;

    public function __construct($body)
    {
        $properties = json_decode($body, true);
        $this->buildByPropertiesArray($properties['storeCard']);
    }

    protected function buildByPropertiesArray($properties)
    {
        foreach ($properties as $propertyName => $value) {
            $parts = array_map(
                function($part) {
                    return ucfirst($part);
                },
                explode('_', $propertyName)
            );

            $propertyKey = lcfirst(implode('', $parts));
            $this->{$propertyKey} = $value;
        }
    }

    /**
     * @return mixed
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @return mixed
     */
    public function getSkrCardBin()
    {
        return $this->skrCardBin;
    }

    /**
     * @return mixed
     */
    public function getSkrCardLast4()
    {
        return $this->skrCardLast4;
    }

    /**
     * @return mixed
     */
    public function getSkrDestinationCardCountryCode()
    {
        return $this->skrDestinationCardCountryCode;
    }

    /**
     * @return mixed
     */
    public function getSkrDestinationCardPanmask()
    {
        return $this->skrDestinationCardPanmask;
    }

    /**
     * @return mixed
     */
    public function getSkrDestinationCardProductCode()
    {
        return $this->skrDestinationCardProductCode;
    }

    /**
     * @return mixed
     */
    public function getSkrDestinationCardSynonim()
    {
        return $this->skrDestinationCardSynonim;
    }

    /**
     * @return mixed
     */
    public function getSkrDestinationCardType()
    {
        return $this->skrDestinationCardType;
    }
}