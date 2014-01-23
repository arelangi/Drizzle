import java.io.File;
import java.io.IOException;


public class IsaidNameChanger {
	
	public static void main(String[] args) throws IOException{
		File folder = new File("C:\\Apache2\\htdocs\\Drizzle\\code\\web\\pics");
		File[] listOfFiles = folder.listFiles();

		    for (int i = 0; i < listOfFiles.length; i++) {
		      if (listOfFiles[i].isFile()) {
		       System.out.println(listOfFiles[i].getName());
		       
		      } 
		    }
	}

}
