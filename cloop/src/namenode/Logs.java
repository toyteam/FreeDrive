package namenode;

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.text.SimpleDateFormat;
import java.util.Date;


public class Logs {
	
	private static FileWriter logFile = null;
	private static SimpleDateFormat df = new SimpleDateFormat("yyyy-MM-dd HH:mm:ss");
	
	public Logs() {
		try {
			//使用前更新文件名
			Settings.updateFileName();
			File f = new File(Settings.logFileName);
			//log文件不存在
			if (!f.exists()) {
				logFile = new FileWriter(Settings.logFileName);
				logFile.write("log system started!\r\n");
			}
			//log文件存在但FileWriter不存在,不清空日志
			if (f.exists() && logFile == null) {
				logFile = new FileWriter(Settings.logFileName,true);
				logFile.write("software system restarted!\r\n");
			}
		} catch (Exception e) {
			e.printStackTrace();
			System.out.println("打开日志失败");
		}
	}
	//增加一条log
	public static void addLog(String data) {
		if (logFile != null) {
			try {
				logFile.write("LOG " + df.format(new Date()) + " :\r\n");
				logFile.write(data.trim());
				logFile.write("\r\n");	//兼容win
				logFile.flush();
				//System.out.println(data);
			} catch (IOException e) {
				e.printStackTrace();
				logFile = null;
			}
		} else {
			System.out.println(data);
		}
	}
	//记录一条错误
	public static void addErr(String data) {
		if (logFile != null) {
			try {
				logFile.write("ERR " + df.format(new Date()) + " :\r\n");
				logFile.write(data.trim());
				logFile.write("\r\n");
				logFile.flush();
			} catch (IOException e) {
				e.printStackTrace();
				logFile = null;
			}
		} else {
			System.err.println(data);
		}
	}
	

}

