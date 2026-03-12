package pildorasInformaticas.condicionales;

import javax.swing.JOptionPane;

public class condicional3 {

    
    //Ejemplo IF con doble condicionante para TRUE

    public static void main(String[] args) {
    
        int distancia_Colegio;
        double renta_Familiar;
        byte hermanos;

        distancia_Colegio=Integer.parseInt(JOptionPane.showInputDialog("Introduce la distancia en Km"));
        renta_Familiar=Double.parseDouble(JOptionPane.showInputDialog("Introduce renta familiar"));
        hermanos=Byte.parseByte(JOptionPane.showInputDialog("Numero de hermanos"));

        if (distancia_Colegio>10 && renta_Familiar<20000 && hermanos>=2) {

            System.out.println("Recibe beca.");
        }else{
            System.out.println("No recibe un carajo.");
        }

        


    }
    
}
