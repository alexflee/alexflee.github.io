
angular.module('TimerApp',[])
  .controller('TimerCtrl', function($scope, $timeout) {

    //get active div with class then its id
    var here = angular.element(document.querySelector(".active")).attr("id");
    var button = angular.element( document.querySelector( '.round-button' ) );
    var buttonOff = angular.element( document.querySelector( '.off-button' ) );
    $scope.timerclockheight = 0;
    //element class
    $scope.theDisplay = 'displayOn';
    $scope.theDisplaystop = 'displayOff';

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
        $scope.theDisplay = 'displayOff';
        $scope.theDisplaystop = 'displayOn';
        buttonOff.addClass('button_appear');
        $scope.timerclockheight = $scope.timerclockheight - takeAway;
        mytimeout = $timeout($scope.onTimeout, 1000);
    };
 
    $scope.startTimer = function() {
        mytimeout = $timeout($scope.onTimeout, 1000);
        $scope.timerclockheight=100;
        button.removeClass('button_appear');
        button.addClass('button_fade');
        $scope.theDisplaystop = 'displayOff';
    };
 
    // stops and resets the current timer
    $scope.stopTimer = function() {
        $scope.$broadcast('timer-stopped', $scope.counter);
        $scope.counter = here;
        $scope.timerclockheight = 0;
        $timeout.cancel(mytimeout);
        button.removeClass('button_fade');
        button.addClass('button_appear');
        $scope.theDisplay = 'displayOn';
        $scope.theDisplaystop = 'displayOff';
    };
 
    // triggered, when the timer stops, you can do something here, maybe show a visual indicator or vibrate the device
    $scope.$on('timer-stopped', function(event, remaining) {
        if(remaining === 0) {
            console.log('your time ran out!');
            $scope.timerclockheight=0;
            $scope.counter = originalNumber;
            button.removeClass('button_fade');
            button.addClass('button_appear');
            $scope.theDisplay = 'displayOn';
            $scope.theDisplaystop = 'displayOff';
        
        }
    });
  }); 