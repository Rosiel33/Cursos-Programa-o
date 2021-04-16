
package Classes;


public class ComputadorGamer extends Computador {
    private int memoriaPlacaVideo(){
        return memoriaPlacaVideo;
    }
    
    public void setMemoriaPlacaVideo (int memoriaPlacaVideo){
        this.memoriaPlacaVideo = memoriaPlacaVideo;
    }
    
    public void jogarNed(){
        System.out.println("jogando need");
    }
}
