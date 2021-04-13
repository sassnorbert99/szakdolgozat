import math
from datetime import date, timedelta, datetime, time, tzinfo
import datetime as datetime
import numpy as np


def move(self):
    solar_dist = constant.SOUTH - declation
    if solar_dist < constant.SOUTH and
    solar_dist > constant.EAST:
        optimised_value = 90
        print("delkeleten helyezkednek el hatekonysag: "
              + str(optimised_value) + "%")
        print("Szoge: " + str(round(solar_dist, 2)))

    elif solar_dist < constant.EAST and
    solar_dist > constant.NORTH:
        optimised_value = 75
        print("eszakkeleten helyezkednek el, hatekonysag: "
              + str(optimised_value) + "%")
        print("Szoge: " + str(round(solar_dist, 2)))

    elif solar_dist > constant.SOUTH and
    solar_dist < constant.WEST:
        optimised_value = 90
        print("delnyugaton helyezkednek el hatekonysag: "
              + str(optimised_value) + "%")
        print("Szoge: " + str(round(solar_dist, 2)))

    else:
        optimised_value = 75
        print("eszaknyugaton helyezkednek el hatekonysag: "
              + str(optimised_value) + "%")
        print("Szoge: " + str(round(solar_dist, 2)))
