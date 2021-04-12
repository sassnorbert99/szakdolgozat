"""
consume = kW / month
"""


class House:
    def __init__(self):
        self.consume = 230
        self.daily = self.consume / 30


class FlatHouse:
    def __init__(self):
        self.consume = 200
        self.daily = self.consume / 30
"""
class Flat:
    def __init__(self, piece):
        self.houses = FlatHouse()
        self.pieces = piece
        self.consume = self.pieces * self.houses.consume
        self.daily = self.consume / 30
"""
