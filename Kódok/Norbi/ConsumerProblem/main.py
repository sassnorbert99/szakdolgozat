from calculate_estates import School, Hospital
from consumers import House, FlatHouse

houses = []
flat_houses = []
flat = []
school = []
hospital = []

house_piece = int(input("Házak száma: "))
flat_house_piece = int(input("lakások száma: "))
school_piece = int(input("Iskolák száma: "))
hospital_piece = int(input("Kórházak száma: "))

student = int(input("Tanulók száma az iskolában: "))
patient = int(input("Betegek száma a kórházban: "))

total_consume = 0
total_daily_consume = 0

if __name__ == '__main__':

    for x in range(house_piece):
        houses.append(House())
        total_consume += houses[x].consume
        total_daily_consume += houses[x].daily

    for x in range(flat_house_piece):
        flat_houses.append(FlatHouse())
        total_consume += flat_houses[x].consume
        total_daily_consume += flat_houses[x].daily

    for x in range(school_piece):
        school.append(School(student))
        total_consume += school[x].consume
        total_daily_consume += school[x].daily

    for x in range(hospital_piece):
        hospital.append(Hospital(patient))
        total_consume += hospital[x].consume
        total_daily_consume += hospital[x].daily




    print("házak száma: ", len(houses))
    print("lakások száma: ", len(flat_houses))
    print("iskolák száma: ", len(school))
    print("kórházak száma", len(hospital))
    print("összes fogyasztó igénye havi szinten: " + str(total_consume) + " kWh")
    print("összes fogyasztó igénye napi szinten: " + str(round(total_daily_consume, 2)) + " kWh")