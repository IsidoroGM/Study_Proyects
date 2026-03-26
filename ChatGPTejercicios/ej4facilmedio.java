/*Crear un programa en Java que pida al usuario 5 números enteros y determine:

Cuál es el número mayor.

Cuál es el número menor.

La suma total de los 5 números.

Usar un bucle (for) para leer los 5 números.

Usar variables para ir guardando:

El mayor número (max)

El menor número (min)

La suma (suma)

Imprimir los resultados al final.

Debe funcionar con números positivos y negativos. */


package ChatGPTejercicios;

import java.util.*;

public class ej4facilmedio {

    public static void main(String[] args) {
        
        try (Scanner scanner = new Scanner(System.in)) {
            int[] valores=new int[5];
            
            for (int i = 0; i < valores.length; i++) {
                System.out.print("Introduce el valor para la posición " + i + ": ");
                
                valores[i] = scanner.nextInt();
            }
            
            for (int i = 0; i < valores.length; i++) {
                System.out.print(valores[i] + " ");
            }
            
            int max = valores[0];
            int min = valores[0];
            
            for (int y=1 ; y < valores.length ; y++){
                
                if (valores[y]> max) max = valores[y];
                if (valores[y]< min) min = valores[y];
            }
            System.out.println("\n--- Resultados ---");
            System.out.println("Mayor: " + max);
            System.out.println("Menor: " + min);
            
            
            
            System.out.println("La suma de todos los valores es: " + (java.util.Arrays.stream(valores).sum()));
        }
    }
    
}
