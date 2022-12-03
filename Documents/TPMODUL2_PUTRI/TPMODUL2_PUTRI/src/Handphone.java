public class Handphone extends Perangkat {
    protected boolean fingerprint;

    public Handphone(boolean fingerprints, String Drive, int Ram, float Processor) {
        super(Drive, Ram, Processor);
        this.fingerprint = fingerprints;
    }

    @Override
    public void informasi() {
        System.out.println("Handphone ini memiliki drive tipe" + " " + drive + " " + "dengan ram sebesar " + ram
                + " " + "GB dan processor secepat" + " " + processor + " " + "Ghz. " + "Selain itu handphone ini "
                + (fingerprint == false ? "Tidak memiliki " : "memiliki ") + "fingeprint");
    }

    public void telfon(int noPhone) {
        System.out.println("Handphone berhasil menyambungkan telfon ke No " + noPhone);
    }

    public void kirimSMS(int noPhone) {
        System.out.println("Handphone berhasil mengirim SMS ke No " + noPhone);
    }

    public void multiSMS(int noPhone, int otherPhoneNumber) {
        System.out.println("Handphone berhasil mengirim SMS ke No " + noPhone + " " + "dan " + otherPhoneNumber);
    }
}
