<?php


namespace YandexCheckoutPayout\Common\Helpers;


use YandexCheckoutPayout\Common\Exceptions\InvalidPropertyValueException;
use YandexCheckoutPayout\Model\IssueDate;

class Parser
{
    /**
     * @param $date
     * @return array
     * @throws \Exception
     */
    public static function parseDateToArray($date)
    {
        $dateTime = new \DateTime($date);

        $result = [
            'full_date' => $dateTime->format('d.m.Y'),
            'year'      => $dateTime->format('Y'),
            'month'     => $dateTime->format('m'),
            'day'       => $dateTime->format('d'),
        ];

        if (empty($result)) {
            throw new InvalidPropertyValueException('Date has incorrect format. For example correct format: 10.10.1990', 0, 'DocIssueDate', $date);
        }

        return $result;
    }

    /**
     * @param $date
     * @return IssueDate
     * @throws \Exception
     */
    public static function parseDateToIssueDate($date)
    {
        $arrDate = self::parseDateToArray($date);
        return new IssueDate($arrDate['full_date'], $arrDate['year'], $arrDate['month'], $arrDate['day']);
    }
}