import math
from datetime import date, timedelta, datetime, time, tzinfo
import numpy as np


def calcsunriseandsunset(date_time):
    a = math.floor((14 - date_time.month) / 12)
    y = date_time.year + 4800 - a
    m = date_time.month + 12 * a - 3
    julian_date = date_time.day + math.floor((153 * m + 2) / 5) +
    365 * y + math.floor(y / 4) - math.floor(
        y / 100) + math.floor(y / 400) - 32045

    nstar = (julian_date - 2451545.0 - 0.0009) - (longitude / 360)
    rounded_value = round(nstar)
    julian_star = 2451545.0 + 0.0009 + (longitude / 360) +
    rounded_value
    M = (357.5291 + 0.98560028 * (julian_star - 2451545)) %
    360
    c = (1.9148 * sinus_to_radian(M)) + (0.0200 *
                                         sinus_to_radian(2 * M)) +
    (0.0003 * sinus_to_radian(3 * M))
    l = (M + 102.9372 + c + 180) % 360
    julian_transit = julian_star + (0.0053 * sinus_to_radian(M)) -
    (0.0069 * sinus_to_radian(2 * l))
    delta = math.asin(sinus_to_radian(l) *
                      sinus_to_radian(23.45)) *
    180 / math.pi
    H = math.acos(
        (sinus_to_radian(-0.83) - sinus_to_radian(latitude) *
         sinus_to_radian(delta)) / (cosinus_to_radian(latitude) *
                                    cosinus_to_radian(delta))) *
    180 / math.pi
    julian_star = 2451545.0 + 0.0009 +
    ((H + longitude) / 360) +
    rounded_value
    julian_sunset = julian_star +
    (0.0053 * sinus_to_radian(M)) -
    (0.0069 * sinus_to_radian(2 * l))
    julian_sunrise = julian_transit -
    (julian_sunset - julian_transit)
    return (calculate_time_from_julian_date(julian_sunrise),
            calculate_time_from_julian_date(julian_sunset))
