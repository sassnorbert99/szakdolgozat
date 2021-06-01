#ifndef WATERPLANT_H
#define WATERPLANT_H


class Waterplant
{
    public:
        /** Default constructor */
        Waterplant(int _felsotartaly,int _alsotartaly,int _szivattyu,int _csap );
        /** Default destructor */
       
        int felsotartaly,alsotartaly,szivattyu,csap;
        
        void Szivattyuzasindit();
        void Szivattyuallj();
        void Csapnyit();
        void Csapzar();
        bool Felsotartalytele;
        bool Alsotartalytele;
    protected:

    private:
};

#endif // WATERPLANT_H
