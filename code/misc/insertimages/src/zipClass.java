
public class zipClass {
	public double lat;
	public double lng;
	
	public zipClass(double l, double n){
		lat=l;
		lng=n;
	}

	public double getLat() {
		return lat;
	}

	public void setLat(double lat) {
		this.lat = lat;
	}

	public double getLng() {
		return lng;
	}

	public void setLng(double lng) {
		this.lng = lng;
	}

	@Override
	public String toString() {
		return "zipClass [lat=" + lat + ", lng=" + lng + "]";
	}
	
	
}
