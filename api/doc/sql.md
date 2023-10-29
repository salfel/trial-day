<p align="center"><a href="https://additive.eu" target="_blank"><img src="https://additive-trial-day.s3.eu-central-1.amazonaws.com/logo.png" width="400"></a></p>


# 02 SQL (PostgreSQL)

Given the following Database:

Host: `ec2-176-34-236-128.eu-west-1.compute.amazonaws.com`

Port: `5432`

User: `trial-day`

PW: `p23be8fa51d0bb009ab27cf97242c179ac982eae25957769a2117a0642fcc7696`

Database: `dbem6ff3g5orbe`

Schema: `trial`

With it's tables

- organizations
- products
- orders

# Queries

Write a query to:

- get the total amount (amount_to_pay) of all orders per organisation per year ordered by year descending

    #### Expected Result:
    | Organization | Year | Amount |
    | ------------ | ---- | ----- |
    | Testhotel Post | 2021 | 123 |
    | ... | ... | ... |
---

- Get all organizations with at least 70 orders in the current year
    #### Expected Result:
  
    | Organization | Count |
    | ------------ | ----- |
    | Testhotel Post | 123 |
    | ... | ... |
---

Add your queries to this document and push to your fork at the end to complete your work.

## Bonus


- Do some further analysis
- get the most sold product per organisation

  #### Expected Result:

  | Organization | Product Name | Count |
  | ------------ | ---- | ----- |
  | Testhotel Post | Übernachtungsgutschein Einzelzimmer | 123 |
  | ... | ... | ... |
---

# Results

**Amount Per Year**

```json
[
	{
		"organization": "Testhotel Post",
		"amount": 932087,
		"year": "2021"
	},
	{
		"organization": "Hotel an der Etsch",
		"amount": 703153,
		"year": "2021"
	},
	{
		"organization": "Trick 17",
		"amount": 19989886,
		"year": "2021"
	},
	{
		"organization": "ADDITIVE",
		"amount": 5842478,
		"year": "2021"
	},
	{
		"organization": "Testhotel Post",
		"amount": 3854023,
		"year": "2020"
	},
	{
		"organization": "Hotel an der Etsch",
		"amount": 2315183,
		"year": "2020"
	},
	{
		"organization": "Trick 17",
		"amount": 68017973,
		"year": "2020"
	},
	{
		"organization": "ADDITIVE",
		"amount": 20410640,
		"year": "2020"
	},
	{
		"organization": "Testhotel Post",
		"amount": 3443813,
		"year": "2019"
	},
	{
		"organization": "Hotel an der Etsch",
		"amount": 2507457,
		"year": "2019"
	},
	{
		"organization": "Trick 17",
		"amount": 67928110,
		"year": "2019"
	},
	{
		"organization": "ADDITIVE",
		"amount": 19087880,
		"year": "2019"
	},
	{
		"organization": "Testhotel Post",
		"amount": 3436314,
		"year": "2018"
	},
	{
		"organization": "Hotel an der Etsch",
		"amount": 1902052,
		"year": "2018"
	},
	{
		"organization": "Trick 17",
		"amount": 74311995,
		"year": "2018"
	},
	{
		"organization": "ADDITIVE",
		"amount": 21391518,
		"year": "2018"
	},
	{
		"organization": "Testhotel Post",
		"amount": 3443974,
		"year": "2017"
	},
	{
		"organization": "Hotel an der Etsch",
		"amount": 2094983,
		"year": "2017"
	},
	{
		"organization": "Trick 17",
		"amount": 75537807,
		"year": "2017"
	},
	{
		"organization": "ADDITIVE",
		"amount": 22768461,
		"year": "2017"
	},
	{
		"organization": "Testhotel Post",
		"amount": 3498301,
		"year": "2016"
	},
	{
		"organization": "Hotel an der Etsch",
		"amount": 2008880,
		"year": "2016"
	},
	{
		"organization": "Trick 17",
		"amount": 68663495,
		"year": "2016"
	},
	{
		"organization": "ADDITIVE",
		"amount": 20856983,
		"year": "2016"
	},
	{
		"organization": "Testhotel Post",
		"amount": 3890328,
		"year": "2015"
	},
	{
		"organization": "Hotel an der Etsch",
		"amount": 2346755,
		"year": "2015"
	},
	{
		"organization": "Trick 17",
		"amount": 80028377,
		"year": "2015"
	},
	{
		"organization": "ADDITIVE",
		"amount": 22863252,
		"year": "2015"
	},
	{
		"organization": "Testhotel Post",
		"amount": 3260857,
		"year": "2014"
	},
	{
		"organization": "Hotel an der Etsch",
		"amount": 1746409,
		"year": "2014"
	},
	{
		"organization": "Trick 17",
		"amount": 65747724,
		"year": "2014"
	},
	{
		"organization": "ADDITIVE",
		"amount": 20149128,
		"year": "2014"
	},
	{
		"organization": "Testhotel Post",
		"amount": 3722486,
		"year": "2013"
	},
	{
		"organization": "Hotel an der Etsch",
		"amount": 2356614,
		"year": "2013"
	},
	{
		"organization": "Trick 17",
		"amount": 64497193,
		"year": "2013"
	},
	{
		"organization": "ADDITIVE",
		"amount": 21126767,
		"year": "2013"
	},
	{
		"organization": "Testhotel Post",
		"amount": 4015108,
		"year": "2012"
	},
	{
		"organization": "Hotel an der Etsch",
		"amount": 2089519,
		"year": "2012"
	},
	{
		"organization": "Trick 17",
		"amount": 76264267,
		"year": "2012"
	},
	{
		"organization": "ADDITIVE",
		"amount": 19745199,
		"year": "2012"
	},
	{
		"organization": "Testhotel Post",
		"amount": 2359030,
		"year": "2011"
	},
	{
		"organization": "Hotel an der Etsch",
		"amount": 1634395,
		"year": "2011"
	},
	{
		"organization": "Trick 17",
		"amount": 56875889,
		"year": "2011"
	},
	{
		"organization": "ADDITIVE",
		"amount": 14314249,
		"year": "2011"
	}
]
```

**Organization with at least 70 orders last year**

```json
[
	{
		"organization": "Hotel an der Etsch",
		"count": 76
	},
	{
		"organization": "Trick 17",
		"count": 70
	},
	{
		"organization": "ADDITIVE",
		"count": 72
	}
]
```

**Most sold Product per Organisation**

```json
[
	{
		"organization": "Testhotel Post",
		"Count": 20000,
		"Product Name": "Übernachtungsgutschein Junior Suite"
	},
	{
		"organization": "Trick 17",
		"Count": 300000,
		"Product Name": "Webseite"
	},
	{
		"organization": "ADDITIVE",
		"Count": 120000,
		"Product Name": "ADDITIVE+CRM"
	},
	{
		"organization": "Hotel an der Etsch",
		"Count": 19000,
		"Product Name": "Beertasting 6 Personen"
	}
]
```
