import java.io.BufferedReader;
import java.io.DataInputStream;
import java.io.FileInputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.util.ArrayList;


public class readCSV {

	@SuppressWarnings("resource")
	public ArrayList<zipClass> getZips(String path) throws IOException{
		
		  ArrayList<zipClass> zips = new ArrayList<zipClass>();		
		  FileInputStream fstream = new FileInputStream(path);
		  DataInputStream in = new DataInputStream(fstream);
		  BufferedReader br = new BufferedReader(new InputStreamReader(in));
		  String strLine;
		  String[] lol;
		  int count =0;
		  while ((strLine = br.readLine()) != null)   {
			  
			  if(count==0){
				  count++;
				  continue;
			  }
			  lol = strLine.split(",");
			  zips.add(new zipClass(Double.parseDouble(lol[3]), Double.parseDouble(lol[4])));
			  count++;			  
		  }		 
		return zips;
	}
}
