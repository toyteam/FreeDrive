package namenode;

public class NamwNode {
	public static void main(String []args){
		ConfigFile cf=new ConfigFile(Settings.confPath);
		cf.readConf();
	}
}
