
package Classes;


public class ComputadorParrudo extends Computador {
    
    private String getCorGabinete(){
        return corGabinete;
    }
    
    public void setCorGabinete( String corGabinete){
        this.corGabinete = corGabinete;
    }
    public void jogarCs(){
        System.out.print("jogando CS");
    }
}
