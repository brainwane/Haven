<?php

$string = '{
  "State": "DC",
  "Application Year": 2015,
  "Name": "Frontend Application",
  "People": [
    {
      "Is Applicant": "Y",
      "Applicant Attest Blind or Disabled": "N",
      "Student Indicator": "N",
      "Medicare Entitlement Indicator": "N",
      "Incarceration Status": "N",
      "Lives In State": "Y",
      "Claimed as Dependent by Person Not on Application": "N",
      "Applicant Attest Long Term Care": "N",
      "Has Insurance": "N",
      "State Health Benefits Through Public Employee": "N",
      "Prior Insurance": "N",
      "Applicant Pregnant Indicator": "N",
      "Applicant Post Partum Period Indicator": "N",
      "Former Foster Care": "N",
      "Required to File Taxes": "Y",
      "US Citizen Indicator": "Y",
      "Applicant Age": 60,
      "Applicant Age >= 90": "N",
      "Hours Worked Per Week": 0,
      "Person ID": 1,
      "Income": {
        "Monthly Income": 0,
        "Wages, Salaries, Tips": 30000,
        "Taxable Interest": 0,
        "Tax-Exempt Interest": 0,
        "Taxable Refunds, Credits, or Offsets of State and Local Income Taxes": 0,
        "Alimony": 0,
        "Capital Gain or Loss": 0,
        "Pensions and Annuities Taxable Amount": 3600,
        "Farm Income or Loss": 0,
        "Unemployment Compensation": 0,
        "Other Income": 0,
        "MAGI Deductions": 0
      },
      "Relationships": [
        {
          "Other ID": 2,
          "Relationship Code": "02",
          "Attest Primary Responsibility": "N"
        },
        {
          "Other ID": 3,
          "Relationship Code": "12",
          "Attest Primary Responsibility": "N"
        }
      ]
    },
    {
      "Is Applicant": "Y",
      "Applicant Attest Blind or Disabled": "N",
      "Student Indicator": "N",
      "Medicare Entitlement Indicator": "N",
      "Incarceration Status": "N",
      "Lives In State": "Y",
      "Claimed as Dependent by Person Not on Application": "N",
      "Applicant Attest Long Term Care": "N",
      "Has Insurance": "N",
      "State Health Benefits Through Public Employee": "N",
      "Prior Insurance": "N",
      "Applicant Pregnant Indicator": "N",
      "Applicant Post Partum Period Indicator": "N",
      "Former Foster Care": "N",
      "Required to File Taxes": "N",
      "US Citizen Indicator": "Y",
      "Applicant Age": 49,
      "Applicant Age >= 90": "N",
      "Hours Worked Per Week": 40,
      "Person ID": 2,
      "Income": {
        "Monthly Income": 0,
        "Wages, Salaries, Tips": 42000,
        "Taxable Interest": 0,
        "Tax-Exempt Interest": 0,
        "Taxable Refunds, Credits, or Offsets of State and Local Income Taxes": 0,
        "Alimony": 0,
        "Capital Gain or Loss": 0,
        "Pensions and Annuities Taxable Amount": 0,
        "Farm Income or Loss": 0,
        "Unemployment Compensation": 0,
        "Other Income": 0,
        "MAGI Deductions": 0
      },
      "Relationships": [
        {
          "Other ID": 1,
          "Relationship Code": "02",
          "Attest Primary Responsibility": "N"
        },
        {
          "Other ID": 3,
          "Relationship Code": "03",
          "Attest Primary Responsibility": "N"
        }
      ]
    },
    {
      "Is Applicant": "Y",
      "Applicant Attest Blind or Disabled": "Y",
      "Student Indicator": "Y",
      "Medicare Entitlement Indicator": "N",
      "Incarceration Status": "N",
      "Lives In State": "Y",
      "Claimed as Dependent by Person Not on Application": "N",
      "Applicant Attest Long Term Care": "N",
      "Has Insurance": "N",
      "State Health Benefits Through Public Employee": "N",
      "Prior Insurance": "N",
      "Applicant Pregnant Indicator": "N",
      "Applicant Post Partum Period Indicator": "N",
      "Former Foster Care": "N",
      "Required to File Taxes": "N",
      "US Citizen Indicator": "Y",
      "Applicant Age": 19,
      "Applicant Age >= 90": "N",
      "Hours Worked Per Week": 0,
      "Person ID": 3,
      "Income": {
        "Monthly Income": 0,
        "Wages, Salaries, Tips": 0,
        "Taxable Interest": 0,
        "Tax-Exempt Interest": 0,
        "Taxable Refunds, Credits, or Offsets of State and Local Income Taxes": 0,
        "Alimony": 0,
        "Capital Gain or Loss": 0,
        "Pensions and Annuities Taxable Amount": 0,
        "Farm Income or Loss": 0,
        "Unemployment Compensation": 0,
        "Other Income": 0,
        "MAGI Deductions": 0
      },
      "Relationships": [
        {
          "Other ID": 1,
          "Relationship Code": "05",
          "Attest Primary Responsibility": "N"
        },
        {
          "Other ID": 2,
          "Relationship Code": "04",
          "Attest Primary Responsibility": "N"
        }
      ]
    }
  ],
  "Physical Households": [
    {
      "Household ID": "Household1",
      "People": [
        {
          "Person ID": 1
        },
        {
          "Person ID": 2
        },
        {
          "Person ID": 3
        }
      ]
    }
  ],
  "Tax Returns": [
    {
      "Filers": [],
      "Dependents": []
    }
  ]
}  ';


$result = json_decode($string, true, 15);

var_dump($result);
?>

