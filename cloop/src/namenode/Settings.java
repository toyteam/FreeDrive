package namenode;

import java.text.SimpleDateFormat;
import java.util.Date;

public class Settings {
	private static SimpleDateFormat df = new SimpleDateFormat("yyyy-MM-dd");
	
	public static String confPath	="conf.txt";
	
	public static String datadir	="file:/data";
	/** log�ļ������� */
	public static String logFileName 	= "log/"+"namenode" + df.format(new Date()) + ".log";
	
	/**��ʱ�����ļ������е�����*/
	public static void updateFileName(){
		logFileName="log/"+"namenode" + df.format(new Date()) + ".log";
		return ;
	}
}
