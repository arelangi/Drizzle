package main;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.DataInputStream;
import java.io.FileInputStream;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStreamReader;

public class CSV2SQL {
	
	public static void main(String[] args) throws IOException{
		FileInputStream fstream = new FileInputStream("C:\\Apache2\\htdocs\\Drizzle\\code\\db\\zipcode.csv");
		  // Get the object of DataInputStream
		  DataInputStream in = new DataInputStream(fstream);
		  BufferedReader br = new BufferedReader(new InputStreamReader(in));
		  String strLine;
		  
		  FileWriter fstreamw = new FileWriter("out.txt");
		  BufferedWriter out = new BufferedWriter(fstreamw);
		  

		  
		  while( (strLine=br.readLine()) !=null  ){
			  if(strLine.length() > 0)
			  out.write("'insert into zip values("+strLine+");',\n");
		  }
		  
		  
	}

}
