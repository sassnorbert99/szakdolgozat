from time import sleep


class WaterThread:
    def __init__(self):
        self.buffer_1 = 0
        self.buffer_2 = 100
        self.pump = False
        self.is_run = True

    def buffer_1_fill(self):
        if self.buffer_2 == 100:
            self.pump = True
            self.fill_buffer()

    def fill_buffer(self):
        while self.buffer_1 != 100 and self.is_run:
            self.buffer_1 += 1
            self.buffer_2 -= 1
            print("buffer1: " + str(self.buffer_1)
                  + " buffer2: " + str(self.buffer_2))
            sleep(0.4)
        self.pump = False

    def fill_buffer_2(self):
        while self.buffer_2 != 100 and self.is_run:
            self.buffer_2 += 1
            self.buffer_1 -= 1
            print("buffer1: " + str(self.buffer_1)
                  + " buffer2: " + str(self.buffer_2))
            sleep(0.4)
        self.pump = False

    def buffer_2_fill(self):
        if self.buffer_1 == 100:
            self.pump = True
            self.fill_buffer_2()

    def buffer_loop(self):
        while True:
            self.buffer_1_fill()
            self.buffer_2_fill()

    def stop_thread(self):
        while True:
            s = input()
            if s == "s":
                self.is_run = False
                while self.buffer_2 != 100:
                    self.buffer_2 += 1
                    self.buffer_1 -= 1
                    print("buffer1: " + str(self.buffer_1)
                          + " buffer2: " + str(self.buffer_2))
                    sleep(0.4)
            elif s == "o":
                self.is_run = True
