import math
from datetime import date, timedelta, datetime, time, tzinfo
import datetime as datetime
import numpy as np

move_desk = 0
optimised_value = 0
def move(self):

    if self > 0:
        move_desk = self * -1
        print("Az asztalt " + str(round(move_desk, 2)) +
              " fokkal elkell tolni balra!")
    elif self == 0:
        print("Az asztalt nem kell eltolni")
    else:
        move_desk = self * -1
        print("Az asztalt " + str(round(move_desk, 2)) +
              " fokkal elkell tolni jobbra")
