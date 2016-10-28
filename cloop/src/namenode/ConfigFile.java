package namenode;


import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;
import javax.xml.xpath.XPath;
import javax.xml.xpath.XPathConstants;
import javax.xml.xpath.XPathExpression;
import javax.xml.xpath.XPathFactory;

import org.w3c.dom.Document;
import org.w3c.dom.NodeList;



  

public class ConfigFile {
	private String configPath="";
	public ConfigFile(String configPath){
		this.configPath=configPath;
	}
	public void readConf(){
		try{
			DocumentBuilderFactory factory = DocumentBuilderFactory.newInstance();  
	         factory.setNamespaceAware(true); // never forget this!  
	         DocumentBuilder builder = factory.newDocumentBuilder();  
	         Document doc = builder.parse(configPath);  

	         XPathFactory pathFactory = XPathFactory.newInstance();  
	         XPath xpath = pathFactory.newXPath();  
	         XPathExpression pathExpression = xpath.compile("//property/name/text()");  

	         Object result = pathExpression.evaluate(doc, XPathConstants.NODESET);  

	         NodeList nodes = (NodeList) result;  
	         for (int i = 0; i < nodes.getLength(); i++) {
	                 System.out.println(nodes.item(i).getNodeValue());  
	         }
		}catch(Exception e){
			
		}
		 
	}
	public void writeConf(){
		
	}
}
