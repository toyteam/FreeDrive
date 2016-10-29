package namenode;

import java.text.SimpleDateFormat;
import java.util.Date;

public class Settings {
	private static SimpleDateFormat df = new SimpleDateFormat("yyyy-MM-dd");
	
	public static String confPath	="conf.txt";
	
	public static String datadir	="file:/data";
	/** log文件的名字 */
	public static String logFileName 	= "log/"+"namenode" + df.format(new Date()) + ".log";
	
	/**随时更新文件名字中的日期*/
	public static void updateFileName(){
		logFileName="log/"+"namenode" + df.format(new Date()) + ".log";
		return ;
	}
}
