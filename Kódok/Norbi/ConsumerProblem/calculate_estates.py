"""
2001-es mérések alapján, tehát a problémát csak megközelítő értékekkel tudjuk kiszámolni
Forrás:
http://www.personal.ceu.hu/students/03/Alexandra_Novikova/2/El%20tertiary%20site%20folders/documents/description_of_eltertiary_for_schools_hu6_ver2.pdf
square_per_consume = azt jelenti, hogy egy négyzetméterre mennyi energia jut egy hónapra
iskolák kalkulálása: 2.5 m2 / diák! Ez az előírás!
forrás:
https://www.origo.hu/itthon/20010414szabvany.html
kórházi forrás (6-8 négyzetméter/beteg)
Forrás:
https://www.palyazat.gov.hu
"""


class School:
    def __init__(self, students):
        self.students = students
        self.square_per_consume = 20
        self.school_size = 2.5 * self.students
        self.consume = self.square_per_consume * self.school_size
        self.daily = self.consume / 30


class Hospital:
    def __init__(self, patient):
        self.patient = patient
        self.square_per_consume = 100
        self.hospital_size = 6 * self.patient
        self.consume = self.square_per_consume * self.hospital_size
        self.daily = self.consume / 30
