import math
from datetime import date, timedelta, datetime, time, tzinfo
import datetime as datetime
import numpy as np
import constant


year = int(input("year: "))

while year < 0 or year > int(date.today().year):
    year = int(input("year: "))
month = int(input("month: "))
while month < 1 or month > 12:
    month = int(input("month: "))
day = int(input("day: "))
while day < 1 or day > 31:
    day = int(input("day: "))
latitude = int(input("latitude (fi): "))
while latitude < -90 or latitude > 90:
    print("Try again!")
    latitude = int(input("latitude (fi): "))

longitude = int(input("longitude: "))

today = date.today()
dn = date.replace(today,
                  int(year),
                  int(month),
                  int(day)).timetuple().tm_yday

def to_radians(val):
    return (math.pi/180) * val
def Format(value):
    return round(value * 1000000) / 1000000


declation = 23.45 * math.sin(to_radians(360 / 365 * (dn + 284)))
declation = Format(declation)
print("a Nap szoghelyzete a szolaris delben: "
      + str(declation))


def daylength(dayOfYear, lat):

    latInRad = np.deg2rad(lat)
    declinationOfEarth = 23.45
                         *np.sin(np.deg2rad(360.0
                         *(283.0+dayOfYear)
                         /365.0))
    if -np.tan(latInRad)
            * np.tan(np.deg2rad(declinationOfEarth)) <= -1.0:
        return 24.0
    elif -np.tan(latInRad)
            * np.tan(np.deg2rad(declinationOfEarth)) >= 1.0:
        return 0.0
    else:
        hourAngle = np.rad2deg(np.arccos(-np.tan(latInRad)
                * np.tan(np.deg2rad(declinationOfEarth))))
        return 2.0*hourAngle/15.0

length_of_the_day = daylength(dn, latitude)
print("nappal hossza: " + str(int(length_of_the_day)) + "h")

zenith_angle = -math.acos(math.sin(latitude)
                          *math.sin(declation)
                          +math.cos(latitude)
                          *math.cos(declation)
                          *math.cos(length_of_the_day))+2
                          *math.pi
print("zenit szog: " + str(round(zenith_angle, 2)))
print("Napmagassag szoge: "
                  + str(round(90 - zenith_angle, 2)))
print("napfelkelte: " + str(hour_value) + ":"
                  + str(abs(minute_value)))
print("naplemente: " + str(set.hour-1) + ":"
                  + str(set.minute))
