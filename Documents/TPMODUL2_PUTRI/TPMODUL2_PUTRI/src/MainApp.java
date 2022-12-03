public class MainApp {
    public static void main(String[] args) throws Exception {
        Perangkat perangkat = new Perangkat("asus", 10, 4.1f);
        perangkat.informasi();

        System.out.println();

        Handphone hp = new Handphone(true, "Hp", 10, 1.2f);
        hp.informasi();
        hp.telfon(1234);
        hp.kirimSMS(3812);
        hp.multiSMS(9813, 2345);

        System.out.println();

        Laptop laptop = new Laptop("Acer", 10, 3.3f, true);
        laptop.informasi();
        laptop.bukaGame("pubg");
        laptop.kirimEmail("maingame@gmail.com");
        laptop.multiEmail("maingame@mail.com", "maingame@mail.com");
    }
}