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
			//ʹ��ǰ�����ļ���
			Settings.updateFileName();
			File f = new File(Settings.logFileName);
			//log�ļ�������
			if (!f.exists()) {
				logFile = new FileWriter(Settings.logFileName);
				logFile.write("log system started!\r\n");
			}
			//log�ļ����ڵ�FileWriter������,�������־
			if (f.exists() && logFile == null) {
				logFile = new FileWriter(Settings.logFileName,true);
				logFile.write("software system restarted!\r\n");
			}
		} catch (Exception e) {
			e.printStackTrace();
			System.out.println("����־ʧ��");
		}
	}
	//����һ��log
	public static void addLog(String data) {
		if (logFile != null) {
			try {
				logFile.write("LOG " + df.format(new Date()) + " :\r\n");
				logFile.write(data.trim());
				logFile.write("\r\n");	//����win
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
	//��¼һ������
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

