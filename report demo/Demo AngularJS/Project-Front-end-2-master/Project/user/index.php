<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KhachHang</title>
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./public/css/styles.css">
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script> 
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-route.js"></script>
	<script src="./AngularJS/app.js"></script>
	<script src="./AngularJS/dirPagination.js"></script>
</head>
<body ng-app="app" ng-controller="myController">
		<!-- KHONG DUOC DONG VO -->
	<header>
		<div ng-include="'./HTML/thanh1.html'"></div>
		<div ng-include="'./HTML/thanh2.html'"></div>
		<div ng-include="'./HTML/narbar.html'"></div>
	</header>
	<content ng-init="displayData()">
		<div class="container">
			<div class="top-content">
				<div class="row">
					<div class="col-md-3 danhmuc1">
						<div ng-include="'./HTML/danhmuc.html'"></div>
					</div>
					<div class="col-md-9">
							<div class="kieung"></div>
							<div class="ngSort">
								<select class ="sortNg" ng-model="sortColumn">
						            <option class="itemsort" value="name">A > Z</option>
						            <option value="-name">Z > A</option>
						            <option value="price">Price: Low To High</option>
						            <option value="-price">Price: High To Low</option>
						        </select>
							</div>
							<div class="homeproduct row">
								<div class="col-md-4" dir-paginate="b in a | orderBy: sortColumn|itemsPerPage:12">
									<div class="product_item">
										<a href="#chitiet/{{b.id}}">
											<img src="../public/images/product/{{b.image}}" alt="" class="img-responsive">
											<h3 class="tkw2_tensp">{{b.name}}</h3>
											<div class="price">
												<p>{{b.price | number:0}}₫</p>
											</div>
											<label class="installment">{{b.installment}}</label>
										</a>
									</div>
								</div>
							</div>
							<div class="ptrang">
			                    <dir-pagination-controls
			                        max-size="5"; 
			                        direction-links="true" 
			                        boundary-links="true" >
			                    </dir-pagination-controls>
							</div>
                		</div>
					</div>
				</div>
			</div>
		</div>
		<div ng-include="'./HTML/logo-hoc.html'"></div>
	</content>
	<footer>
		<div ng-include="'./HTML/bot.html'"></div>
	</footer>
	<!-- KHONG DUOC DONG VO -->
</body>
</html>