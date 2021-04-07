import math
from datetime import date, timedelta, datetime, time, tzinfo
import datetime as datetime
import numpy as np

year = int(input("year: "))

while year < 0 or year > int(date.today().year):
    print("0-tól " + str(date.today().year) + "-ig lehet évszámot megadni")
    year = int(input("year: "))
month = int(input("month: "))
while month < 1 or month > 12:
    print("januártól decemberig (1-12) lehet hónapot megadni! Próbálja újra!")
    month = int(input("month: "))
day = int(input("day: "))
while day < 1 or day > 31:
    print("1-31-ig lehet maximum napot megadni")
    day = int(input("day: "))
latitude = int(input("latitude (fi): "))
while latitude < -90 or latitude > 90:
    print("Try again!")
    latitude = int(input("latitude (fi): "))

longitude = int(input("longitude: "))

#A nap helyzete a szoláris délben az egyenlítő síkjához viszonyítva
#dn = int(input("day serial number: ")) #Február 29 ugyanolyan sorszámot kap, mint 28-a
today = date.today()
dn = date.replace(today, int(year), int(month), int(day)).timetuple().tm_yday

def to_radians(val):
    return (math.pi/180) * val
def Format(value):
    return round(value * 1000000) / 1000000


declation = 23.45 * math.sin(to_radians(360 / 365 * (dn + 284)))
declation = Format(declation)
print("a Nap szöghelyzete a szoláris délben: " + str(declation)) #Ha pozitív, akkor Északon van
if declation > 0:
    print("A deklinációs szög Északon van")
elif declation == 0:
    print("napéjegyenlőség idejét állította be")
else:
    print("A deklinációs szög délen van")

"""
Az óraszög definíciója szerint déli 12
órakor 0°, és óránként 15°-ot változik. Értéke délelőtt negatív, délután pozitív.
ws = (-(math.sin(latitude)) * math.sin(declation))/(math.cos(latitude) * math.cos(declation))
"""

def daylength(dayOfYear, lat):

    latInRad = np.deg2rad(lat)
    declinationOfEarth = 23.45*np.sin(np.deg2rad(360.0*(283.0+dayOfYear)/365.0))
    if -np.tan(latInRad) * np.tan(np.deg2rad(declinationOfEarth)) <= -1.0:
        return 24.0
    elif -np.tan(latInRad) * np.tan(np.deg2rad(declinationOfEarth)) >= 1.0:
        return 0.0
    else:
        hourAngle = np.rad2deg(np.arccos(-np.tan(latInRad) * np.tan(np.deg2rad(declinationOfEarth))))
        return 2.0*hourAngle/15.0

length_of_the_day = daylength(dn, latitude)
print("nappal hossza: " + str(int(length_of_the_day)) + "h")

zenith_angle = -math.acos(math.sin(latitude)*math.sin(declation)+math.cos(latitude)*math.cos(declation)*math.cos(length_of_the_day))+2*math.pi
print("zenit szög: " + str(zenith_angle))
print("Napmagasság szöge: " + str(90 - zenith_angle))

magyarorszag = math.degrees(math.tanh(19 / 47))
magyarorszag_beta_point = 180 - (22 + 90)
alpha_angle = math.degrees(math.tanh(longitude / latitude))
alpha_angle = Format(alpha_angle)
beta_point = 180 - (alpha_angle + 90)
print(beta_point)
final_point = int(magyarorszag_beta_point - beta_point)
print("Az asztalt " + str(final_point) + " fokkal kell eltolni")
#**************–**************************************************************************


def sinus_to_radian(deg):
    return math.sin(deg * math.pi / 180)


def cosinus_to_radian(deg):
    return math.cos(deg * math.pi / 180)


def calculate_time_from_julian_date(julian_date):
    julian_date = julian_date + .5
    secs = int((julian_date - int(julian_date)) * 24 * 60 * 60 + .5)
    min = int(secs / 60)
    hour = int(min / 60)
    return time(hour, min % 60, secs % 60)


def calcsunriseandsunset(date_time):
    a = math.floor((14 - date_time.month) / 12)
    y = date_time.year + 4800 - a
    m = date_time.month + 12 * a - 3
    julian_date = date_time.day + math.floor((153 * m + 2) / 5) + 365 * y + math.floor(y / 4) - math.floor(
        y / 100) + math.floor(y / 400) - 32045

    nstar = (julian_date - 2451545.0 - 0.0009) - (longitude / 360)
    rounded_value = round(nstar)
    julian_star = 2451545.0 + 0.0009 + (longitude / 360) + rounded_value
    M = (357.5291 + 0.98560028 * (julian_star - 2451545)) % 360
    c = (1.9148 * sinus_to_radian(M)) + (0.0200 * sinus_to_radian(2 * M)) + (0.0003 * sinus_to_radian(3 * M))
    l = (M + 102.9372 + c + 180) % 360
    julian_transit = julian_star + (0.0053 * sinus_to_radian(M)) - (0.0069 * sinus_to_radian(2 * l))
    delta = math.asin(sinus_to_radian(l) * sinus_to_radian(23.45)) * 180 / math.pi
    H = math.acos(
        (sinus_to_radian(-0.83) - sinus_to_radian(latitude) * sinus_to_radian(delta)) / (cosinus_to_radian(latitude) * cosinus_to_radian(delta))) * 180 / math.pi
    julian_star = 2451545.0 + 0.0009 + ((H + longitude) / 360) + rounded_value
    julian_sunset = julian_star + (0.0053 * sinus_to_radian(M)) - (0.0069 * sinus_to_radian(2 * l))
    julian_sunrise = julian_transit - (julian_sunset - julian_transit)
    return (calculate_time_from_julian_date(julian_sunrise), calculate_time_from_julian_date(julian_sunset))





today2 = date.replace(today, int(year), int(month), int(day))

rise, set = calcsunriseandsunset(today2)
"""
if today2.month < 3 and today2.day < 28 or today2.month > 10 and today2.day > 31:
    minute_value = rise.minute-30
    hour_value = rise.hour-1
    if minute_value < 0:
        hour_value = hour_value-1
        abs(rise.minute)
else:
    minute_value = rise.minute
    hour_value = rise.hour
"""
minute_value = rise.minute-30
hour_value = rise.hour-1
if minute_value < 0:
    hour_value = hour_value-1
    abs(rise.minute)

if today2.month >= 2 and today2.day >= 28 and today2.month <= 10 and today2.day <= 31:
    hour_value += 1


print("napfelkelte: " + str(hour_value) + ":" + str(abs(minute_value)))
print("naplemente: " + str(set.hour-1) + ":" + str(set.minute))



"""
Források:
https://regi.tankonyvtar.hu/hu/tartalom/tkt/kornyezettechnika-eloszo/ch02s05.html?fbclid=IwAR3tSqvGfJSXhc7qM5Fx1RHOk97AdIFtbKH50tUtxWvXWumKwd0Q8yXs__4

"""