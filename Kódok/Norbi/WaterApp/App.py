import threading

from water import WaterThread

if __name__ == '__main__':
    thread = WaterThread()
    #thread.buffer_loop()

    t1 = threading.Thread(target=thread.buffer_loop)
    t1.start()
    t2 = threading.Thread(target=thread.stop_thread)
    t2.start()
