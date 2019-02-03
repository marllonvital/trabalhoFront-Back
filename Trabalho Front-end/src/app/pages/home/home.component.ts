import { Component, OnInit, EventEmitter, ViewChild } from '@angular/core';
import {MaterializeAction} from "angular2-materialize"

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

 	@ViewChild('carousel') carouselElement; 
 	actions = new EventEmitter<string>();

 imageURLs = [
  	"/assets/imagens/bats2.jpg",
  	"/assets/imagens/bats3.jpg",
    "/assets/imagens/bats5.jpg",
    "/assets/imagens/bats6.jpg",
    "/assets/imagens/bats7.gif",
    "/assets/imagens/bats8.jpg",
  ];

  showInitialized = false;

  constructor() {
    // example of a hacky way to add an image to the carousel dynamically
    window.setTimeout(() => {
      this.imageURLs = [this.imageURLs[0],this.imageURLs[1],this.imageURLs[2],this.imageURLs[3],this.imageURLs[4],this.imageURLs[5]]; // duplicate the first image
      this.carouselElement.nativeElement.classList.toggle("initialized")
      this.actions.emit("carousel");
    },1000);
}

  ngOnInit() {
  }

 }