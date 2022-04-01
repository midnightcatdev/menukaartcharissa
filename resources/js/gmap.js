// function initMap() {
// //     // Create a new StyledMapType object, passing it an array of styles,
// //     // and the name to be displayed on the map type control.
//     const styledMapType = new google.maps.StyledMapType(
//         [
//             {
//                 "featureType": "landscape",
//                 "stylers": [
//                     {
//                         "color": "#ebebeb"
//                     }
//                 ]
//             },
//             {
//                 "featureType": "poi",
//                 "elementType": "labels.text",
//                 "stylers": [
//                     {
//                         "visibility": "off"
//                     }
//                 ]
//             },
//             {
//                 "featureType": "poi.business",
//                 "stylers": [
//                     {
//                         "color": "#ebebeb"
//                     },
//                     {
//                         "visibility": "off"
//                     }
//                 ]
//             },
//             {
//                 "featureType": "poi.park",
//                 "stylers": [
//                     {
//                         "color": "#ebebeb"
//                     }
//                 ]
//             },
//             {
//                 "featureType": "road",
//                 "elementType": "labels.icon",
//                 "stylers": [
//                     {
//                         "visibility": "off"
//                     }
//                 ]
//             },
//             {
//                 "featureType": "transit",
//                 "stylers": [
//                     {
//                         "visibility": "off"
//                     }
//                 ]
//             }
//         ],
//         {name: "Styled Map"}
//     );
//
//     const clweb = {lat: 52.066146044498375, lng: 5.1116071399178855};
//
//     const clwebmap = new google.maps.Map(document.getElementById("map"), {
//         zoom: 14,
//         center: clweb,
//         mapTypeControlOptions: {
//             mapTypeIds: ["roadmap", "satellite", "hybrid", "terrain", "styled_map"],
//         },
//     });
//
//     const marker = new google.maps.Marker({
//         position: clweb,
//         map: clwebmap,
//     });
//
//     clwebmap.mapTypes.set("styled_map", styledMapType);
//     clwebmap.setMapTypeId("styled_map");
// }
