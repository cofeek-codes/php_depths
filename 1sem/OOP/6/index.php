<?php

class Flight
{
    public static function printSchedule($schedule)
    {
        $formattedSchedule = [];
        foreach ($schedule as $departureTime => $enRouteTime) {

            $departureParts = explode(':', $departureTime);
            $enRouteParts = explode(':', $enRouteTime);


            $arrivalHours = (int)$departureParts[0] + (int)$enRouteParts[0];
            $arrivalMinutes = (int)$departureParts[1] + (int)$enRouteParts[1];


            if ($arrivalMinutes >= 60) {
                $arrivalHours++;
                $arrivalMinutes -= 60;
            }
            $formattedArrivalTime = sprintf('%02d:%02d', $arrivalHours, $arrivalMinutes);


            $formattedSchedule[] = "$departureTime $enRouteTime $formattedArrivalTime";
        }

        return implode("\n", $formattedSchedule);
    }
}


$schedule = [
    "9:45" => "6:20",
    "10:20" => "1:15",
    "23:10" => "0:55"
];

echo Flight::printSchedule($schedule);
