import * as THREE from 'three';

const scene = new THREE.Scene();
scene.background = new THREE.Color(0x000000);

// Add a cube to the scene
const geometry = new THREE.BoxGeometry(3, 3, 3); // width, height, depth
const material = new THREE.MeshLambertMaterial({ color: 0x5499C7 });
const mesh = new THREE.Mesh(geometry, material);
mesh.position.set(0, 0, 0); // Optional, 0,0,0 is the default
scene.add(mesh);

// Set up lights
const ambientLight = new THREE.AmbientLight(0xffffff, 0.6);
scene.add(ambientLight);

const dirLight = new THREE.DirectionalLight(0xffffff, 0.6);
dirLight.position.set(10, 20, 0); // x, y, z
scene.add(dirLight);

const width = 10;
const height = 5;
const camera = new THREE.OrthographicCamera(
  width / -1, // left
  width / 1, // right
  height / 1, // top
  height / -1, // bottom
  1, // near
  100 // far
);

camera.position.set(4, 4, 4);
camera.lookAt(0, 0, 0);

// Renderer
const canvasWidth = Math.min(($(window).width()*.95), 800);
const canvasHeight = Math.min(($(window).width()*.95) / 2, 400);
const renderer = new THREE.WebGLRenderer({ antialias: true });
renderer.setSize(canvasWidth, canvasHeight);
renderer.render(scene, camera);

// Add it to HTML
document.querySelector('section').appendChild(renderer.domElement);