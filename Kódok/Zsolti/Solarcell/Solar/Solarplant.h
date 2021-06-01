#ifndef SOLARPLANT_H
#define SOLARPLANT_H


class Solarplant
{
    public:
        /** Default constructor */
         Solarplant(int _lrpin, int _udpin,
               int _leftport,int _rightport,int _upport,int _downport);

       int lrpint,udpin;
        int leftport,rightport,upport,downport;
        int lrposition,udposition;
        int left,right,up,down;
        int diff;
        int delaytime;
        
        Servo horizontal;
        Servo vertical;
        bool enabled;


        void Move();
        void Enable();
        void Disable();
        void StartPosition();
    protected:

    private:
};

#endif // SOLARPLANT_H
