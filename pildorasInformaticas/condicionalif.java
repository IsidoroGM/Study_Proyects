package pildorasInformaticas;

import javax.swing.*;

public class condicionalif{

    public static void main(String[] args) {
   
    int edad = Integer.parseInt(JOptionPane.showInputDialog("¿Qué edad tienes?"));

    if(edad>18){

        String carnet=JOptionPane.showInputDialog("¿Tienes carnet? : ");

            if(carnet.equals("si")){

                JOptionPane.showMessageDialog(null, "Puedes comprar el coche");

            } else {

                JOptionPane.showMessageDialog(null, "NO puedes comprar el coche");

            }

        } else {

             JOptionPane.showMessageDialog(null, "Sácate el carnet.");


        }

    }
    
}
