public class Perangkat {
    protected String drive;
    protected int ram;
    protected float processor;

    public Perangkat(String Drive, int Ram, float Processor) {
        this.drive = Drive;
        this.ram = Ram;
        this.processor = Processor;
    }

    public void informasi() {
        System.out.println("Perangkat tidak diketahui memiliki tipe" + " " + drive + " " + "dengan ram sebesar " + ram
                + " " + "GB dan processor secepat" + " " + processor + " " + "Ghz");
    }
}

