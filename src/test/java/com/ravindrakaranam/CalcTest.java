package com.ravindrakaranam;

import static org.junit.Assert.*;
import org.junit.*;

public class CalcTest 
{
	Calc c;
	
	@Before
	// Will be performed before each test.
	public void testSetup()
	{
		System.out.println("Setup for test complete.");
	}

	@After
	// Will be performed after each test.
	public void testComplete()
	{
		System.out.println("Test complete.");
	}

	@Test
	public void test1()
	{
		// Can be run when reader methods and default 
		// constructor are complete.
		c=new Calc();
		try
		{
			assertEquals(15,c.add(10,5),0);
			System.out.println("Test Add numbers completed successfully.");
		}
		catch (AssertionError e)
		{
			System.out.println("Test Add numbers failed.");
			System.out.println(e.getMessage());
			throw e;
			
		}
	}

	@Test
	public void test2()
	{
		// Can be run when reader methods and default 
		// constructor are complete.
		c=new Calc();
		try
		{
			assertEquals(40,c.subtract(50,10),0);
			System.out.println("Test subtract numbers completed successfully.");
		}
		catch (AssertionError e)
		{
			System.out.println("Test subtract numbers failed.");
			System.out.println(e.getMessage());
			throw e;
			
		}
	}
	
	@Test
	public void test3()
	{
		// Can be run when reader methods and default 
		// constructor are complete.
		c=new Calc();
		try
		{
			assertEquals(200,c.multiply(20,10),0);
			System.out.println("Test multiply numbers completed successfully.");
		}
		catch (AssertionError e)
		{
			System.out.println("Test multiply numbers failed.");
			System.out.println(e.getMessage());
			throw e;
			
		}
	}
	
	@Test
	public void test4()
	{
		// Can be run when reader methods and default 
		// constructor are complete.
		c=new Calc();
		try
		{
			assertEquals(30,c.divide(150,5),0);
			System.out.println("Test divide numbers completed successfully.");
		}
		catch (AssertionError e)
		{
			System.out.println("Test divide numbers failed.");
			System.out.println(e.getMessage());
			throw e;
			
		}
	}
	
	public static void main(String[] args) 
	{
		org.junit.runner.JUnitCore.main("CalcTest");
	}
}

 
