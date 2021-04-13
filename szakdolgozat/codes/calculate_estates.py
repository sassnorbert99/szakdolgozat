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
