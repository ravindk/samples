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
			assertEquals(15,c.addNumbers(10,5),0);
			System.out.println("Test 1 completed successfully.");
		}
		catch (AssertionError e)
		{
			System.out.println(e.getMessage());
			throw e;
			
		}
	}

	
	public static void main(String[] args) 
	{
		org.junit.runner.JUnitCore.main("CalcTest");
	}
}

 
