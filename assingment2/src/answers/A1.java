package answers;


public class A1 {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		System.out.println("Welcome to eclipse");
		code1();
		code2();
		code3();
	}

	private static void code2() {
		// TODO Auto-generated method stub
		double duration = 0L;
		long start = System.currentTimeMillis();
		Increment(5);
		long end = System.currentTimeMillis();
		duration += end - start;
		System.out.println("Running Time=" + duration);
	}

	private static void code3() {
		// TODO Auto-generated method stub

	}

	private static void code1() {
		// TODO Auto-generated method stub
		int a = 5, result;
		result = Increment(a);
		System.out.println("OUTPUT");
		System.out.println(result);
	}

	private static int Increment(int a) {
		a += 1;
		return a;
	}

}
