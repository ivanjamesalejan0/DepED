/* -----------------
 * MAIN MENU
 * -----------------*/

var arrMainNav = [
	{
		url: "#admin",
		title: "Admin",
		children: [
			{
				url: "admin/home",
				title: "Home",
				description: "DepEd Disaster Report Management System"
			},
			{
				url: "admin/reports",
				title: "Reports",
				description: "Manage reports lists, approval, new report creation, etc"
			},
			{
				url: "admin/statistics",
				title: "Statistics",
				description: "View statistics for reports, includes graphs, geo-fencing, etc"
			},
		]
	},
	{
		url: "#users",
		title: "Users",
		children: [
			{
				url: "admin/users",
				title: "Manage Users",
				description: "Manage users list, registration approval and denial, activation and deactivation"
			},
			{
				url: "admin/users/create",
				title: "Add User",
				description: "Create new user credential for admin, teacher, or student"
			},
		]
	},
];
