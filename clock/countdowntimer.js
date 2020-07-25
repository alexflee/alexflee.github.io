
angular.module('TimerApp',[])
  .controller('TimerCtrl', function($scope, $timeout) {

    //get active div with class then its id
    var here = angular.element(document.querySelector(".active")).attr("id");
    $scope.timerclockheight = 0;
    $scope.timerclockheight2 = 50;

//work out take away every second
    var takeAway = 100 / here;
    var originalNumber = here;

//timer value
    if(here == 10){ $scope.counter = 10;}


    var mytimeout = null; // the current timeoutID
 
    // actual timer method, counts down every second, stops on zero
    $scope.onTimeout = function() {
        if($scope.counter ===  0) {
            $scope.$broadcast('timer-stopped', 0);
            $timeout.cancel(mytimeout);
            return;
        }
        $scope.counter--;
        $scope.timerclockheight = $scope.timerclockheight - takeAway;
        mytimeout = $timeout($scope.onTimeout, 1000);
    };
 
    $scope.startTimer = function() {
        mytimeout = $timeout($scope.onTimeout, 1000);
        $scope.timerclockheight = 100;
    };
 
    // stops and resets the current timer
    $scope.stopTimer = function() {
        $scope.$broadcast('timer-stopped', $scope.counter);
        $scope.counter = here;
        $scope.timerclockheight = 0;
        $timeout.cancel(mytimeout);
    };
 
    // triggered, when the timer stops, you can do something here, maybe show a visual indicator or vibrate the device
    $scope.$on('timer-stopped', function(event, remaining) {
        if(remaining === 0) {
            console.log('your time ran out!');
            $scope.timerclockheight=0;
            $scope.counter = originalNumber;
        
        }
    });
  }); 