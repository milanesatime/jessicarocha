$("body, .modal-header").noiseGen({
  opacity: .8,
  width: 60,
  height: 60,
  grainDimension: 1,
  bias: 5,
  distribution: "bell",
  fromColor: "ffffff",
  toColor: "cccccc",
  independentChannels: true,
  fallbackImage: "blue.png"
});