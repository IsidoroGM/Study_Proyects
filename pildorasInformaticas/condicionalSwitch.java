package pildorasInformaticas;

import javax.swing.*;

public class condicionalSwitch{

    public static void main(String[] args) {
        
        int hijos = Integer.parseInt(JOptionPane.showInputDialog("Cuantos hijos hay:"));

        switch (hijos) {
            case 0 -> System.out.println("A procrear!");
        
            case 1 -> System.out.println("Por algo se empieza.");

            case 2 -> System.out.println("Tienes la pareja.");

            case 3 -> System.out.println("Te vas animando!");

            case 4 -> System.out.println("Ya tienes familia numerosa.");
        }


    }

    @Override
    public String toString() {
        return "condicionalSwitch []";
    }

}
