from calculate_estates import School, Hospital
from consumers import House, FlatHouse

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




    print("hazak szama: ", len(houses))
    print("lakasok szama: ", len(flat_houses))
    print("iskolak szama: ", len(school))
    print("korhazak szama", len(hospital))
    print("osszes fogyaszto igenye havi szinten: "
          + str(total_consume) + " kWh")
    print("osszes fogyaszto igenye napi szinten: "
          + str(round(total_daily_consume, 2)) + " kWh")
